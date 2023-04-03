
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

    <div class="container">
      <h3 align="center">Dynamic Dependent Searchable Select Box with PHP Ajax jQuery</h3>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">Select Data</div>
        <div class="panel-body">
          <div class="form-group">
            <label>Select Category</label>
            <select name="category_item" id="category_item" class="form-control input-lg" data-live-search="true" title="Select Category">

            </select>
          </div>
          <div class="form-group">
            <label>Select Sub Category</label>
            <select name="sub_category_item" id="sub_category_item" class="form-control input-lg" data-live-search="true" title="Select Sub Category">

            </select>
          </div>
          
                   <div class="form-group">
            <label>Select Sub City</label>
            <select name="sub_category_city" id="sub_category_city" class="form-control input-lg" data-live-search="true" title="Select Sub City">

            </select>
          </div>
                   
                   <div class="form-group">
            <label>Select Sub Brgy</label>
            <select name="sub_category_brgy" id="sub_category_brgy" class="form-control input-lg" data-live-search="true" title="Select Sub brgy">

            </select>
          </div>
          
          
          
        </div>
      </div>
    </div>


<script>
$(document).ready(function(){

  $('#category_item').selectpicker();

  $('#sub_category_item').selectpicker();


  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_data.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_item').html(html);
          $('#category_item').selectpicker('refresh');
        }
        else
        {
            
            
            
            
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
          
          
          
          
        }
      }
    })
  }

  $(document).on('change', '#category_item', function(){
    var category_id = $('#category_item').val();
    load_data('sub_category_data', category_id);
  });
  
  
  
  
  
   
    $('#sub_category_item').selectpicker();

  $('#sub_category_city').selectpicker();


  load_data2('category_data');

  function load_data2(type2, category_id2 = '')
  {
    $.ajax({
      url:"load_data2.php",
      method:"POST",
      data:{type2:type2, category_id2:category_id2},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type2 == 'category_data')
        {
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
        }
        else
        {
            
            
            
            
          $('#sub_category_city').html(html);
          $('#sub_category_city').selectpicker('refresh');
          
          
          
          
        }
      }
    })
  }

  $(document).on('change', '#sub_category_item', function(){
    var category_id2 = $('#sub_category_item').val();
    load_data2('sub_category_city', category_id2);
  });
  
  
  
  
  
  
    
    $('#sub_category_city').selectpicker();

  $('#sub_category_brgy').selectpicker();


  load_data3('category_data');

  function load_data3(type3, category_id3 = '')
  {
    $.ajax({
      url:"load_data3.php",
      method:"POST",
      data:{type3:type3, category_id3:category_id3},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type3 == 'category_data')
        {
          $('#sub_category_city').html(html);
          $('#sub_category_city').selectpicker('refresh');
        }
        else
        {
            
            
            
            
          $('#sub_category_brgy').html(html);
          $('#sub_category_brgy').selectpicker('refresh');
          
          
          
          
        }
      }
    })
  }

  $(document).on('change', '#sub_category_city', function(){
    var category_id3 = $('#sub_category_city').val();
    load_data3('sub_category_brgy', category_id3);
  });
  
  
  
  

  
  
  
});
</script>