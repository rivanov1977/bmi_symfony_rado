//alert(calc_options_W[1].kilograms.label);
var OPTION, VAL;

function initHtmlElements()
{
    OPTION = $(".weight_select_opt").clone();
    $(".weight_select_opt").remove();
    
    VAL = $(".opt_val").clone();
    $(".opt_val").remove();
}

function draw_W_selector()
{
    $('#weight_select_label').text(calc_options_W[0]);
    
    $('#weight_select').html("");
    
    W_options = calc_options_W[1];
    
    for(var key in W_options)
    {
       opt = OPTION.clone();
       opt.attr('value', key);
       opt.text(W_options[key].label);
      
       $('#weight_select').append(opt);
    } 
}

function W_changed()
{
    draw_Val_selector('W');
}

function H_changed()
{
   draw_Val_selector('H');
}

function draw_Val_selector(type)
{
    
    if(type=='W')
    {
        opts = W_options;
        holder = $('#W_val_holder');
        selector = $('#weight_select');
        input_name = 'W_val[]';
    }
    
    if(type=='H')
    {
        opts = H_options;
        holder = $('#H_val_holder');
        selector = $('#height_select');
        input_name = 'H_val[]';
    }
    
    holder.html("");
    
    selected_key = selector.val();
    opts_values = opts[selected_key].values;
    
    for(var v=0; v<opts_values.length; v++)
    {
    
       val_ = VAL.clone();
       $(val_.find('input')[0]).attr('name', input_name);
       $(val_.find('div')[0]).text(opts_values[v].sufix);
      
       holder.append(val_);
    } 
}

function draw_H_selector()
{
    
    $('#height_select_label').text(calc_options_H[0]);
    
    $('#height_select').html("");
    
    H_options = calc_options_H[1];
    
    for(var key in H_options)
    {
       opt = OPTION.clone();
       opt.attr('value', key);
       opt.text(H_options[key].label);
      
       $('#height_select').append(opt);
    } 
}

function init()
{
    initHtmlElements();
    
    draw_W_selector();
    $('#weight_select').val(calculation_weight_select);
    draw_Val_selector('W');
    
    valuesw = $('#W_val_holder').find('input');
    
    for(var v=0; v<valuesw.length; v++)
    {
        inp = $(valuesw[v]);
        if(calculation_weights[v]!='')inp.val(calculation_weights[v]);
    }
    
    draw_H_selector();
    $('#height_select').val(calculation_height_select);
    draw_Val_selector('H');
    
    valuesh = $('#H_val_holder').find('input');
    for(var v=0; v<valuesh.length; v++)
    {
        inp = $(valuesh[v]);
        if(calculation_heights[v]!='')inp.val(calculation_heights[v]);
    }
   
}


$(document).ready(function() {
    init();
    
});