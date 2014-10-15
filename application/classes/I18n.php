<?php defined('SYSPATH') OR die('No direct script access.');


class I18n extends Kohana_I18n{

    
    public static $defined = array();
    public static $undefined = array();
    public static $ln = null;
    public static $context = array();

    public static function init($context)
    {
        I18n::$context = array();
        I18n::$undefined = array();
        I18n::$defined = array();
        I18n::$ln = I18n::lang();
        
        //var_dump($context);
        
        $query = DB::select('alias','context',array(I18n::$ln, 'content'))
                    ->from('lang')
                    ->where('context', 'IN', $context)
                    ->or_where('context', '=', 'global')
                    ->execute()->as_array();
               

                    
        foreach($query as $row)
        {
            I18n::$defined[$row['context']][$row['alias']] = $row['content'];
 
        }
        
       

    }
    
    public static function search($alias,$context)
    {
        
       
        if(is_array($context)) $context = 'system';
        
        if(array_key_exists($context,I18n::$defined)
           && array_key_exists($alias,I18n::$defined[$context]) )
        {
            return (!empty(I18n::$defined[$context][$alias])) ? I18n::$defined[$context][$alias] : I18n::$ln.'::'.$context.'->'.$alias;
        }
        else
        {
            
          
        
            I18n::$undefined[$context][$alias] = '';
                               
            //var_dump(I18n::$undefined);
            
            
            return 'alias::'.$context.'->'.$alias;
        }
    }
    
    public static function add()
    {
        
        if(!empty(I18n::$undefined))
        {
                
            
            $query = DB::insert('lang', array('alias','context'));
            
            
            foreach (I18n::$undefined as $context => $row)
            {
                foreach($row as $alias => $value)
                {
                   
                    $query->values(array($alias,$context));
                }
                
                
            }
            
            $query->execute();
        }
    }
    
    
    
    
    
    

}

function __($alias,$context = 'global')
{
     
    return ($alias) ? I18n::search($alias,$context) : null;
}

function dump($array)
{
   
   echo '<pre>';
   print_r($array);
   echo '</pre>';
     
}
