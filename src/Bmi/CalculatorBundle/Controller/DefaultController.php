<?php



namespace Bmi\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bmi\CalculatorBundle\Entity\Calculatordata;

use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Serializer;


class DefaultController extends Controller
{
    public function indexAction()
    {       
        
        $calculatorData = new Calculatordata();
        $weights = $calculatorData->getWeightResources();
        $heights = $calculatorData->getHeightResources();
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $calculation_message = '';
        
        $keys_W = array_keys($weights[1]);
        $keys_H = array_keys($heights[1]);
        $calculation_weight_select = $keys_W[0];
        $calculation_height_select = $keys_H[0];
        $calculation_weight_vals = '';
        $calculation_height_vals = '';
        
        foreach ($session->getFlashBag()->get('calculation_message', array()) as $v) $calculation_message = $v;
        
        foreach ($session->getFlashBag()->get('calculation_weight_select', array()) as $v) $calculation_weight_select = $v;
        foreach ($session->getFlashBag()->get('calculation_height_select', array()) as $v) $calculation_height_select = $v;
        foreach ($session->getFlashBag()->get('calculation_weight_vals', array()) as $v) $calculation_weight_vals = $v;
        foreach ($session->getFlashBag()->get('calculation_height_vals', array()) as $v) $calculation_height_vals = $v;
        
        
        return $this->render('BmiCalculatorBundle:Default:index.html.twig', array(
            'page_name'=>'Enter Your `Weight` and `Height`',
            'calc_options_W'=> json_encode($weights),
            'calc_options_H'=> json_encode($heights),
            'calculation_message' => $calculation_message,
            'calculation_weight_select' => $calculation_weight_select,
            'calculation_height_select' => $calculation_height_select,
            'calculation_weight_vals' => $calculation_weight_vals,
            'calculation_height_vals' => $calculation_height_vals
        ));
        
    }
    
    public function resultAction()
    {
        $calculatorData = new Calculatordata();
        $weights = $calculatorData->getWeightResources();
        $heights = $calculatorData->getHeightResources();
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $weights_type = $request->request->get('weight_select');
        $heights_type = $request->request->get('height_select');
        $weights_vals = $request->request->get('W_val');
        $heights_vals = $request->request->get('H_val');
        
        $weights_selected = $weights[1][$weights_type]['values'];
        $heights_selected = $heights[1][$heights_type]['values'];
        
        $incorrect_values = array();
        foreach($weights_vals as $k=>$v)
        {
            if(
                    ($v>$weights_selected[$k]['max'] || $v<$weights_selected[$k]['min'])
                    ||
                    ($weights_selected[$k]['type']=='int' && intval($v)!=$v)
                    ||
                    (!is_numeric($v))
            )
            {
                if($v=='')$v='n/a';
                $incorrect_values[] = $v.' '.$weights_selected[$k]['sufix'];
            }
            
        }
        
        foreach($heights_vals as $k=>$v)
        {
            if(
                    ($v>$heights_selected[$k]['max'] || $v<$heights_selected[$k]['min'])
                    ||
                    ($heights_selected[$k]['type']=='int' && intval($v)!=$v)
                    ||
                    (!is_numeric($v))
            )
            {
                if($v=='')$v='n/a';
                $incorrect_values[] = $v.' '.$heights_selected[$k]['sufix'];
            }
        }
        
        if(!empty($incorrect_values))
        {
            $session->getFlashBag()->add('calculation_message', 'Invalid values:<br>'.implode(', ',$incorrect_values));
            
            $session->getFlashBag()->add('calculation_weight_select', $weights_type);
            $session->getFlashBag()->add('calculation_height_select', $heights_type);
            $session->getFlashBag()->add('calculation_weight_vals', implode(',', $weights_vals) );
            $session->getFlashBag()->add('calculation_height_vals', implode(',', $heights_vals) ) ;
            
            $url = $this->generateUrl('bmi_calculator_homepage'); 
            return $this->redirect($url);
        }
        
        $User_weight = $weights_vals[0];
        if($weights_type=='pounds')$User_weight = $weights_vals[0]*0.45359237;
        if($weights_type=='stones_and_pounds')$User_weight = $weights_vals[0]*6.35029 + $weights_vals[1]*0.45359237;
        
        $User_height = $heights_vals[0];
        if($heights_type=='centimeters')$User_height = $heights_vals[0]/100;
        if($heights_type=='inches')$User_height = ($heights_vals[0]*2.54)/100;
        if($heights_type=='feet_and_inches')$User_height = $heights_vals[0]/3.2808+($heights_vals[1]*2.54)/100;
        
        $User_bmi = $User_weight/($User_height*$User_height);
        
        
        return $this->render('BmiCalculatorBundle:Default:result.html.twig', array(
            'page_name'=>'BMI Result',
            'User_weight' => $User_weight,
            'User_height' => $User_height,
            'User_bmi' => $User_bmi
        ));
        
    }
    
    
}
