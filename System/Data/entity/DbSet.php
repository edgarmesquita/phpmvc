<?php
/**
 * Description of DbSet
 *
 * @author Edgar
 */
class DbSet
{
    /**
     * Adds the given entity to the context underlying the set in the Added state
     * such that it will be inserted into the database when SaveChanges is called.
     * 
     * @param object $entity
     * @return object $entity
     */
    public function Add(&$entity)
    {
        
    }
    
    /**
     * Attaches the given entity to the context underlying the set. That is, the
     * entity is placed into the context in the Unchanged state, just as if it had
     * been read from the database.
     * 
     * @param object $entity
     * @return object $entity
     */
    public function Attach(&$entity)
    {
        
    }
    
    /**
     * 
     * @param object $entity
     * @return object $entity
     */
    public function Remove(&$entity)
    {
        
    }
    
    /**
     * Creates a raw SQL query that will return entities in this set.
     * 
     * @param string $sql
     * @param array $parameters
     */
    public function SqlQuery($sql, $parameters)
    {
        
    }
}
?>