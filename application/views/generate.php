<div class="container product-container">

      <h1>MATCH MATRIX <br/><span style="font-size:30px;">ASTRO - COMPATIBILITY</span></h1>

      <!-- <h2 class="first-h2" style="margin-bottom: 50px; margin-top:-10px;">
        
      </h2> -->

      <h2 style="text-align:left;">Enter Your Name &amp; Birthdate</h2>
  
      <div class="form-group form_inner">

        <div class="col-sm-4  form-group ">
            <input type="text" name="fname_first" class="form-control on-focus"  id="fname-info_first" placeholder="Enter First Name" />
        </div>
        
        <div class="col-sm-4   form-group ">
            <input type="hidden" name="mname_first" class="form-control on-focus"  id="mname-info_first" placeholder="Enter Middle Name" />    
        </div>
        
        <div class="col-sm-4  nopadding ">
            <input type="hidden" name="lname_first" class="form-control on-focus"  id="lname-info_first" placeholder="Enter Last Name" />
        </div>      

      </div>

      <div class="form-group form_inner select-full col-sm-8 ">
        <div class="form-col mySelect select">
            <div class="form-group month  col-sm-4 ">
                <select class="form-control on-select-focus" id="tMonth_first" name="inputDateMonth_first_first">
                    <option value="">Month</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="form-group day col-sm-4 ">
              <select class="form-control on-select-focus-day" id="tDay_first" name="inputDateDay_first">
                  <option value="">Day</option>
                  <?php
                    for($date=1; $date<=31; $date++)
                    {
                  ?>
                      <option value="<?php echo $date;?>"><?php echo $date;?></option>
                  <?php
                    }
                  ?>
              </select>
            </div>
            <div class="form-group year col-sm-4">
              <select class="form-control on-select-focus-year" id="tYear_first" name="inputDateYear_first">
                  <option value="">Select Year</option>

                  <?php
                    for($date=1941; $date<=2010; $date++)
                    {
                  ?>
                      <option value="<?php echo $date;?>"><?php echo $date;?></option>
                  <?php
                    }
                  ?>

              </select>
            </div>
           <div class="clear"></div>
        </div>
      </div>

      <div class="second-form">

        <div class="form-group form_inner">
          <h2 style="text-align:left;">Enter Their Name &amp; Birthdate</h2>
        </div>

        <div class="form-group form_inner">

          <div class="col-sm-4  form-group ">
              <input type="text" name="fname" class="form-control on-focus"  id="fname-info_second" placeholder="Enter First Name" />
          </div>
          
          <div class="col-sm-4   form-group ">
              <input type="hidden" name="mname" class="form-control on-focus"  id="mname-info_second" placeholder="Enter Middle Name" />    
          </div>
          
          <div class="col-sm-4  nopadding ">
              <input type="hidden" name="lname" class="form-control on-focus"  id="lname-info_second" placeholder="Enter Last Name" />
          </div>      

        </div>

        <div class="form-group form_inner select-full col-sm-8 ">
          <div class="form-col mySelect select">
              <div class="form-group month  col-sm-4 ">
                  <select class="form-control on-select-focus" id="tMonth_second" name="inputDateMonth">
                      <option value="">Month</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select>
              </div>
              <div class="form-group day col-sm-4 ">
                <select class="form-control on-select-focus-day" id="tDay_second" name="inputDateDay">
                    <option value="">Day</option>
                    <?php
                      for($date=1; $date<=31; $date++)
                      {
                    ?>
                        <option value="<?php echo $date;?>"><?php echo $date;?></option>
                    <?php
                      }
                    ?>
                </select>
              </div>
              <div class="form-group year col-sm-4">
                <select class="form-control on-select-focus-year" id="tYear_second" name="inputDateYear">
                    <option value="">Select Year</option>

                    <?php
                      for($date=1941; $date<=2010; $date++)
                      {
                    ?>
                        <option value="<?php echo $date;?>"><?php echo $date;?></option>
                    <?php
                      }
                    ?>

                </select>
              </div>
            <div class="clear"></div>
          </div>
        </div>

      </div>

 
      <div class="center-generate-button">

          <button type="button" class="small-continue btn" id="generate-pdf">CALCULATE COMPATIBILITY</button>
          
      </div>

     

      <script>

              $('#generate-pdf').on("click",function()
              {

                if(
                  $('#fname-info_first').val()=="" || 
                  $('#tDay_first').val()=="" || 
                  $('#tMonth_first').val()=="" || 
                  $('#tYear_first').val()=="" ||
                
                  $('#fname-info_second').val()=="" || 
                  $('#tDay_first_second').val()=="" || 
                  $('#tMonth_first_second').val()=="" || 
                  $('#tYear_first_second').val()==""
                
                ) {
                    alert('Please input all full name and birthday!');
                }
                else
                {

                  var fname_second=$('#fname-info_second').val();
                  var mname_second=$('#mname-info_second').val();
                  var lname_second=$('#lname-info_second').val();
                  var month_second=$('#tMonth_second').val();
                  var day_second=$('#tDay_second').val();
                  var year_second=$('#tYear_second').val();
                  var name_second = fname_second + " " + mname_second + " " + lname_second;

                  var fname_first=$('#fname-info_first').val();
                  var mname_first=$('#mname-info_first').val();
                  var lname_first=$('#lname-info_first').val();
                  var month_first=$('#tMonth_first').val();
                  var day_first=$('#tDay_first').val();
                  var year_first=$('#tYear_first').val();
                  var name_first = fname_first + " " + mname_first + " " + lname_first;

                  console.log(fname_second);
                  console.log(fname_first);

                  var url ="<?php echo base_url(); ?>content" + "?name_first=" + name_first + "&month_first=" + month_first + "&day_first=" + day_first + "&year_first=" + year_first + "&name_second=" + name_second + "&month_second=" + month_second + "&day_second=" + day_second + "&year_second=" + year_second;

                  console.log(url);

                  // var url ="<?php echo base_url(); ?>content" 

                  // + "?first_name=" + fname 
                  // + "&middle_name=" + mname 
                  // + "&last_name=" + lname 
                  // + "&birth_day=" + day 
                  // + "&birth_month=" + month

                  window.open(url, '_blank');

                }

              });

      </script>
</div>
