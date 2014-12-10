<?php
// src/Bmi/CalculatorBundle/Entity/Calculatordata.php
namespace Bmi\CalculatorBundle\Entity;

class Calculatordata
{
   
     protected $weightResources = array(
     
     'Your Weight:',
         
     array(
        "kilograms"=>array(
            'values'=>array(
                array('min'=>10, 'max'=>250, 'type'=>'dec', 'sufix'=>'kg.') 
            ),
            'label'=>'kilograms – numeric values between 10 and 250'
        ),
        
        'pounds'=>array(
            'values'=>array(
                array('min'=>22, 'max'=>540, 'type'=>'int', 'sufix'=>'lbs') 
            ),
            'label'=>'pounds (lbs) - integer value between 22 and 540'
        ),
        
        'stones_and_pounds'=>array(
            'values'=>array(
                array('min'=>21, 'max'=>39, 'type'=>'int', 'sufix'=>'st'),
                array('min'=>0,  'max'=>13, 'type'=>'int', 'sufix'=>'lbs') 
            ),
            'label'=>'stones and pounds (stones integer between 21 and 39; pounds between 0 and 13)'
        )
    )
         
    );
    
    protected $heightResources = array(
     
     'Your Height:',
         
     array(
        "centimeters"=>array(
            'values'=>array(
                array('min'=>90, 'max'=>210, 'type'=>'int', 'sufix'=>'cm.') 
            ),
            'label'=>'centimeters – integer value between 90 and 210'
        ),
        
        'meters'=>array(
            'values'=>array(
                array('min'=>0.9, 'max'=>2.1, 'type'=>'dec', 'sufix'=>'m.') 
            ),
            'label'=>'meters – a decimal point is accepted and the values are between 0.90 to 2.10'
        ),
         
        'inches'=>array(
            'values'=>array(
                array('min'=>35, 'max'=>82, 'type'=>'int', 'sufix'=>'inch') 
            ),
            'label'=>'inches - integer value between 35 and 82'
        ),
        
        'feet_and_inches'=>array(
            'values'=>array(
                array('min'=>3, 'max'=>6, 'type'=>'int', 'sufix'=>'feet'),
                array('min'=>0,  'max'=>11, 'type'=>'int', 'sufix'=>'inch') 
            ),
            'label'=>'feet and inches (feet integer between 3 and 6; inches between 0 and 11)'
        )
    )
         
    );
    
     
    public function getWeightResources()
    {
        return($this->weightResources);
    }
    
    public function getHeightResources()
    {
        return($this->heightResources);
    }
    
    
    
    
}
