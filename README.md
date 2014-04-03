phpmvc
======

PHP MVC Framework

```php
<?php
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
?>
```
