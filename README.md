PHP MVC Framework
======

PHP MVC Framework

## Instalação

### Estrutura de pastas

* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Areas **_(opcional)_**
  - ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Exemplo **_(nome da área)_**
    * ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Controllers
    * ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Models
    * ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Views
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Content **_(imagens, css e javascript)_**
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Controllers 
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Models
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/folder.png) Views
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/attibutes.png) MvcApplication.php
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/attibutes.png) config.xml
* ![](https://cdn1.iconfinder.com/data/icons/pc_de_hamburg_icon_pack/16x16/attibutes.png) index.php


#### MvcApplication.php

```php
namespace ProjetoExemplo;

/**
 * Description of MvcApplication
 *
 * @author Edgar Mesquita
 */
class MvcApplication extends \System\Web\HttpApplication
{
    public function Start()
    {
        \ActiveRecord\Config::initialize(function($cfg)
        {
            $connectionStrings = \System\Configuration\ConfigurationManager::ConnectionStrings();
            $cfg->set_model_directory( MVC_ROOT_PATH . 'Domain');
            $cfg->set_connections(array(
                'Development' => $connectionStrings["DefaultDb"],
                'Production' => $connectionStrings["DefaultDb"]
            ));
            $cfg->set_default_connection('Production');
        });
        \System\Mvc\AreaRegistration::RegisterAllAreas();
        self::RegisterRoutes(\System\Routing\RouteTable::GetRoutes());
    }
    
    public static function RegisterRoutes(\System\Routing\RouteCollection $routes)
    {
        $routes->MapRoute(
                "Default",
                "{controller}/{action}/{id}",
                array(
                    "controller"=>"home",
                    "action"=>"index",
                    "id" => \System\Mvc\UrlParameter::GetOptional()
                )
        );
        $routes->MapRoute(
                "HomeDefault",
                "{action}/{id}",
                array(
                    "controller"=>"home",
                    "action"=>"index",
                    "id" => \System\Mvc\UrlParameter::GetOptional()
                )
        );
        
    }
}
```

#### config.xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<configuration>
    <application namespace="ProjetoExemplo" inherits="ProjetoExemplo\MvcApplication" />
    <appSettings>
        <add key="Email" value="contato@projetoexemplo.com" />
    </appSettings>
    <connectionStrings>
        <add name="DefaultDb" connectionString="mysql://usuario:senha@mysql.projetoexemplo.com/projetoexemplo;charset=utf8" />
    </connectionStrings>
    <authentication loginUrl="~/admin/account/login" timeout="2880" />
</configuration>
```

#### index.php

```php
require_once 'System/Application.php';
$app = new \System\Application();
$app->Start();
```

### Exemplo de implementação do Controller

```php

namespace ProjetoExemplo\Controllers;

use ProjetoExemplo\Domain\Customer;
use ProjetoExemplo\Domain\User;
use ProjetoExemplo\Models\RegisterModel;
/**
 * Description of HomeController
 *
 * @author Edgar Mesquita
 */
class HomeController extends Controller
{

    public function Index()
    {
        return $this->View('index');
    }

    public function Videos()
    {
        return $this->View('videos');
    }

    public function Register(RegisterModel $model)
    {
        $user = new User();
        $user->first_name = $model->firstName;
        $user->last_name = $model->lastName;
        $user->email = $model->email;
        $user->password = md5($model->password);
        $user->token = md5(uniqid(rand(), true));
        
        if($user->save())
        {
            $customer = new Customer();
            $customer->user_id = $user->user_id;
            $customer->save();
            
            $mail = new \ProjetoExemplo\Business\Mail\SendMail();
            $mail->SetFrom("cadastro@projetoexemplo.com", "Projeto Exemplo");
            $mail->AddAddress($user->email, $user->first_name . " " . $user->last_name);
            $mail->SetSubject("Bem-vindo ao Projeto Exemplo");
            $mail->SetTemplate("views/mail/welcome.tpl");
            $mail->AddVariable("firstName", $user->first_name);
            $mail->AddVariable("lastName", $user->last_name);
            $mail->AddVariable("token", $user->token);
            
            $mail->Send();
        }
        return $this->RedirectToAction('index', 'home');
    }
}

```

### Exemplo de modelo
```php

namespace ProjetoExemplo\Models;

/**
 * Description of RegisterModel
 *
 * @author Edgar
 */
class RegisterModel
{
    /**
     * #\System\DataAnnotations\Display('Primeiro Nome')
     * #\System\DataAnnotations\Required('O primeiro nome deve ser preenchido')
     * @var string
     */
    public $firstName;
    
    /**
     * #\System\DataAnnotations\Display('Segundo Nome')
     * #\System\DataAnnotations\Required('O último nome deve ser preenchido')
     * @var string
     */
    public $lastName;
    
    /**
     * #\System\DataAnnotations\Required('O e-mail deve ser preenchido')
     * #\System\DataAnnotations\Remote('validateEmail', 'account', '', 'E-mail já foi cadastrado')
     * @var string
     */
    public $email;
    
    /**
     * #\System\DataAnnotations\Required('O e-mail deve ser confirmado')
     * @var string
     */
    public $emailConfirm;
    
    /**
     * #\System\DataAnnotations\Required('A senha deve ser preenchida')
     * @var string
     */
    public $password;
    
    /**
     * #\System\DataAnnotations\Required('A senha deve ser comfirmada')
     * @var string
     */
    public $passwordConfirm;
}

```

### Exemplo de implementação da View

```tpl

<form id="form1" name="form1" method="post" action="{$Url->Action("register", "home")}">
    <p class="txtnome">
        {$Html->TextBoxFor("firstName", null, [["placeholder","Seu primeiro Nome"]])}
        {$Html->ValidationMessageFor("firstName")}
    </p>
    <p class="txtsobrenome">
        {$Html->TextBoxFor("lastName", null, [["placeholder","Seu segundo Nome"]])}
        {$Html->ValidationMessageFor("lastName")}
    </p>
    <p class="txtemail">
        {$Html->TextBoxFor("email", null, [["placeholder","Seu e-mail"]])}
        {$Html->ValidationMessageFor("email")}
    </p>
    <p class="txtrepitaemail">
        {$Html->TextBoxFor("emailConfirm", null, [["placeholder","Confirme seu e-mail"]])}
        {$Html->ValidationMessageFor("emailConfirm")}
    </p>
    <p class="txtsenha">
        {$Html->TextBoxFor("password", null, [["placeholder","Sua senha"]])}
        {$Html->ValidationMessageFor("password")}
    </p>
    <p class="txtrepitasenha">
        {$Html->TextBoxFor("passwordConfirm", null, [["placeholder","Confirme sua senha"]])}
        {$Html->ValidationMessageFor("passwordConfirm")}
    </p>
    <p></p><hr></hr>
    <p class="botao">
        <input type="submit" value="Confirmar Cadastro" />
    </p>
    <p class="termo">
        Clicando no botão <strong>Cadastrar</strong>, você estará cofirmando o aceite dos
        <a href="#">Termos de uso</a>.
    </p>
</form>

```
