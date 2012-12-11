
<?php

   /*

   Plugin Name: Undergraduate Cost Calculator

   Plugin URI: http://localhost:43553/

   Description: This is used to calculate the total cost estimate for an undergraduate student
   
   Version: 1.0
   
   Author: AE-DOC (GSU)
   
   License: xyz
 
   */
   
  
function cal( $atts )
{
       
       echo '<center><b style="font-size:x-large; color:white;">GSU Calculators</b></center>';
      
  
  ?>
  
    
    <script src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/ui.tabs.js" type="text/javascript"></script>  
    <script  type="text/javascript" src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/swfobject.js"></script> 
    
    
    

    
                                <div id="pageheadline">
                    <h1>Cost Calculator</h1>
                    
                </div>
            
        
    
    
    
    <!-------------  June 08 2012 Tuition calculator ----------------->
<div id="content">
 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/css/boxy.css" />
<script type="text/javascript" src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/jquery.form.js"></script>
<script type="text/javascript" src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/jquery.boxy.js"></script>
<script type="text/javascript" src="<?php bloginfo('wpurl') ?>/wp-content/plugins/undergrad-calculator/js/calculate.js"></script>
<SCRIPT TYPE="text/javascript"> 
    function hidefood(index) {
      //alert(index);
      
      
      var el = document.getElementById('meal');
        
      var fel = document.getElementById('fmeal');
      
        if (   (index == 3 || index == 4 || index==7 || index==8)) {          
                       el.style.display = 'none';
                       fel.style.display = '';
        }
        else {
                el.style.display = '';
                fel.style.display = 'none';
        }
      
      
      
      
      }
</SCRIPT>  
<div id="error" style=" color:#FF0000"> </div>
  <FORM id="calc" class="calc"  name="calc" action="#" method="post">
     <FIELDSET>
         <LEGEND> Student Information   </LEGEND>
         
         <p> Note:  This cost calculator is for undergraduate students only for the 2012-2013 school year.  Estimates are based on a full-time schedule of 15 or more semester hours. Please see the <a  target="_blank" href="http://www.gsu.edu/studentaccounts/tuition_and_fees.html">Student Accounts website</a> for graduate tuition, fees and related costs.  
         
 </p>
            <LABEL>Enrollment:  </LABEL>
                <SELECT name="enrollment" class="slc" onchange="updateAgeCosts();">
                                    <option value="0" >Select</option>
                                    <option   value="2">Per Year (Fall/Spring)</option>
                                    <option   value="1">Per Semester</option>
                  </SELECT> <br />
                                                         
             <LABEL>Tuition Classification:  </LABEL>
                  <SELECT name="residency" class="slc"  id="residency"   onchange="toggle('resident_hope');">
                                <option value="" >Select</option>
                                <option   value="is"  >Resident of Georgia </option>
                                <option   value="oos" >Nonresident  </option>
                  </SELECT>
                  <a href="#" class="boxyinfo" id="residency" title="Residency Info" ><img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a><br />  
                           
                                                        
                                                         
             <label>Status:  </label>
                    <SELECT class="slc" id="entrystatus" name="entrystatus"   onchange="toggle('school');">
                                   <OPTION   value "" >Select</OPTION>
                                    <OPTION value="freshman" >Incoming Freshman&nbsp;&nbsp;</OPTION>  
                                    <option value="transfer" >Transfer from In-State School</option>
                                    <option value="transfer_oos" >Transfer from Out-of-State</option>
                     </SELECT>  <br />  
                           <div id="visatypecon" style="display:none;">             
               <label>Visa Type:  </label>
                    <SELECT class="slc" id="visatype" name="visatype"   onchange="if (this.selectedIndex==2) document.getElementById('agecon').style.display='';">
                                   <OPTION   value "" >Select</OPTION>
                                    <OPTION value="" >None</OPTION>  
                                    <option value="ForJ" >F or J</option>
                                
                     </SELECT>  <br />                                  
                                          </div>
                                          <div id="agecon" style="display:none;">
                   <label>Age:  </label>
                    <SELECT class="slc" id="age" name="age"   onchange="updateAgeCosts();">
                                   <OPTION   value "" >Select</OPTION>
                                    <OPTION value="26oryounger" >26 or younger</OPTION>  
                                    <option value="27to34" >27 and older</option>
                                <!--<option value="35orolder" >35 and older</option>-->
                     </SELECT>  <br />                           
                                          </div>
                                               
       <DIV class ="required" id="school" style=" display:none; ">                     
             <LABEL>Previous School:  </LABEL>
                                 <SELECT     class ="slc"   name="previousschool" id="previousschool" onchange="toggle('previousschool');">
                                    <option value="" >Select Previous School</option>
                                        <OPTION value="usg" >    Abraham Baldwin Agricultural College    </OPTION>
                                        <OPTION value="usg" >    Albany State University    </OPTION>
                                        <OPTION value="usg" >    Armstrong Atlantic State University    </OPTION>
                                        <OPTION value="usg" >    Atlanta Metropolitan College    </OPTION>
                                        <OPTION value="usg" >    Augusta State University    </OPTION>
                                        <OPTION value="usg" >    Bainbridge College    </OPTION>
                                        <OPTION value="usg" >    Clayton State University    </OPTION>
                                        <OPTION value="usg" >    College of Coastal Georgia    </OPTION>
                                        <OPTION value="usg" >    Columbus State University    </OPTION>
                                        <OPTION value="usg" >    Dalton State College    </OPTION>
                                        <OPTION value="usg" >    Darton College    </OPTION>
                                        <OPTION value="usg" >    East Georgia College    </OPTION>
                                        <OPTION value="usg" >    Fort Valley State University    </OPTION>
                                        <OPTION value="usg" >    Gainesville State College    </OPTION>
                                        <OPTION value="usg" >    Georgia College & State University    </OPTION>
                                        <OPTION value="usg" >    Georgia Gwinnett College    </OPTION>
                                        <OPTION value="usg" >    Georgia Highlands College    </OPTION>
                                        <OPTION value="usg" >    Georgia Institute of Technology    </OPTION>
                                        <OPTION value="usg" >    Georgia Perimeter College    </OPTION>
                                        <OPTION value="usg" >    Georgia Southern University    </OPTION>
                                        <OPTION value="usg" >    Georgia Southwestern State University    </OPTION>
                                        <OPTION value="usg" >    Georgia State University    </OPTION>
                                        <OPTION value="usg" >    Gordon College    </OPTION>
                                        <OPTION value="usg" >    Kennesaw State University    </OPTION>
                                        <OPTION value="usg" >    Macon State College    </OPTION>
                                        <OPTION value="usg" >    Medical College of Georgia    </OPTION>
                                        <OPTION value="usg" >    Middle Georgia College    </OPTION>
                                        <OPTION value="usg" >    North Georgia College & State University    </OPTION>
                                        <OPTION value="usg" >    Savannah State University    </OPTION>
                                        <OPTION value="usg" >    Skidaway Institute of Oceanography    </OPTION>
                                        <OPTION value="usg" >    Southern Polytechnic State University    </OPTION>
                                        <OPTION value="usg" >    South Georgia College    </OPTION>
                                        <OPTION value="usg" >    University of Georgia    </OPTION>
                                        <OPTION value="usg" >    University of West Georgia    </OPTION>
                                        <OPTION value="usg" >    Valdosta State University    </OPTION>
                                        <OPTION value="usg" >    Waycross College    </OPTION>
                                        <OPTION value="o" >    Other/Private college or university    </OPTION>
                                 </SELECT>
                </DIV> 
                  <DIV class ="required" id="semesterdiv" style="display:none;">                    
                <LABEL >Semester You Entered: </LABEL>
                               <select name="yearyouenterd" class ="slc" id="yearyouentered" >
                                    <option value="" selected>Select Semester You Entered</option>
                                    <option value="555">After Summer 2009</option> 
                                    <option value="899">Spring or Summer 2009</option>                                                                
                                    <!--<option value="788">Spring 2008 or Summer 2008</option>  
                                    <option value="555"> to Spring 2008</option>  -->                                                             
                                                                                                 
                                </SELECT>
                  </div>
                                
    
          </FIELDSET>
          <br/>
          
          
          <FIELDSET>
                     <LEGEND> Tuition and Fees</LEGEND> 
                        <DIV class = notes>
                           <P class = last>&nbsp; </P>                       
                          <h4><i id="tuition_fees">$ 0.0</i></h4>   
                        </DIV>
                 
                   <LABEL style="width:35%;"> Books&nbsp;&&nbsp;Supplies: &nbsp;</LABEL>                                   
                     <div  class="cost" id="book_cost" name="book_cost"  style="padding-left:5px;">$0.0</div>
                                        
                     <LABEL style="width:35%;"><i id="tuition_type" style="font-size:9px"></i>  Tuition: &nbsp;</LABEL>
                            <div class="cost" id="tuition_cost" name="tuition_cost" style="padding-left:5px;">$0.0</div>
                            <input type="hidden" name="tempinsurancecost" id="tempinsurancecost" value="0">
                   <!---<div id="healthinscon" style="display:none;">--->
                    
                    <LABEL style="width:35%;display:none;" id="ins_label">Mandatory Health Insurance: &nbsp;</LABEL>
                            <div class="cost" style="white-space:nowrap;display:none;" id="ins_value"><span id="insurance_cost" name="insurance_cost" style="padding-top:0px;">$0.0</span> <a href="#" class="boxyinfo" id="insurance" title="Health Insurance Info" >
               <img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0" align="top"></a></div>
                   <!---</div>--->
                     <LABEL style="width:35%;">Mandatory Student Fee: &nbsp;</LABEL>
                            <div class="cost" id="studentfee_cost" name="studentfee_cost" style="padding-left:5px;">$0.0</div>
                     <LABEL style="width:35%;"> Tuition and Fees Info: &nbsp;</LABEL>
                            <div class="cost" id="a" name="a" style="padding-left:5px;">
                     
                            <a href="#" class="boxyinfo" id="books" title="Tuition and Fees Info" >
               <img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a> </div>
                                              
                        <LABEL style="width:35%;"></LABEL>
                            <div class="cost" id="a" name="a" style="padding-left:5px;">
                     
                           </div>                       
                            
                 
                            
            </FIELDSET>
          <br />
           <FIELDSET>
                     <LEGEND> Housing, Meal Plans & Transportation </LEGEND>
                        <DIV class = notes>
                           <P class = last>&nbsp; </P>
                          <h4><i id="htotal">$0.0</i></h4> 
                        </DIV>
        
                            <LABEL><a target="_blank" href="http://www.gsu.edu/housing/"> Housing: </a></LABEL>
                              <select class="slc"  name="housing"  onchange="hidefood(this.selectedIndex);">
                                        <option value="0">Select A Preference</option>
                                        <option value="3985">University Commons</option>
                                        <option value="3350">University Loft Apartments  </option>
                                      
                                        <option value="4787">Freshman Hall (single room) </option>
                                        <option value="3865">Freshman Hall (shared room) </option>  
                                        
                                        <option value="3142">Greek (single)</option>    
                                        <option value="2700">Greek (shared)</option>
                                                        
                                                        
                                        <!---<option value="5783">Piedmont North (large shared)</option>
                                        <option value="3682">Piedmont North (small shared)</option> --->      
                                                                         
                                        <option value="4119">Piedmont North (double)</option>
                                        <option value="3767">Piedmont North (triple)</option>                                      
                                                                            
                                         <option value="0">Off Campus </option>
                                         <option value="0">None</option>
                               </select>
                                        <a   href="#" class="boxyinfo" id="housing" title="Housing Info" >
                                        <img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a> </br>                          
                          
                          <div id="fmeal" style=" display:none"> 
                           <LABEL><a target="_blank" href="http://www.gsu.edu/gastate_oncampus_dining.html">Meal Plan: </a></LABEL>
                            
                            <LABEL class="slc" >Is included with this plan  </LABEL> 
                            
                                
                          </div>
                          
                          
                        
                          <div id="meal">
                            <LABEL><a  target="_blank" href="http://www.gsu.edu/pantherdining/">PantherMeals: </a></LABEL>
                            <select class="slc"  name="mealplan"  >
                                    <option value="0">Select A Plan &nbsp;&nbsp;&nbsp;&nbsp;</option>
                                    <option value="1694">5-day meal plan</option>
                                    <option value="1795">7-day meal plan</option>
                                    <option value="0">None</option>
                                
                                </select>  
                                           <a  href="#" class="boxyinfo" id="mealplans" title="Meal Plan Info" >
                                              <img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a> <br />
                                              
                                              </div>
               <LABEL><a  target="_blank" href="http://www.gsu.edu/parking/">Transportation</a>: </LABEL>
                                  <select class="slc"  name="transportation" >
                                        <option value="0">Select A Choice &nbsp;</option>
                                        <option value="400">Commons tenant parking</option>
                                        <option value="90">Lofts tenant parking</option>
                                         <option value="215">Lofts non-tenant parking</option>
                                        <option value="400">Piedmont tenant parking</option>
                                        <option value="215">Student (M-Deck) parking</option>  
                                        <option value="244">MARTA pass</option>    
                                        <option value="0">None</option>
                                 
                                    </select> 
                                    <a href="#" class="boxyinfo" id="transportation" title="Transportation Info" >
                                              <img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a>
                 <LABEL>  </LABEL>       
               
          </FIELDSET>
          <br />
            <FIELDSET>
                     <LEGEND> Financial Aid Information </LEGEND> 
                       <p> Please use this section of the calculator to add any scholarships and grants
                        you are eligible to receive for your education. 
                         If you wish to investigate these options further, you may go to the 
                         <a href="http://www.fafsa.ed.gov/"  target="_blank">FAFSA website (Federal Student Aid)</a>.
                         Georgia residents may also wish to learn more about the <a target="_blank" href="http://www.gsu.edu/financialaid/HOPE_scholarship.html">HOPE Scholarship</a> and the <a target="_blank" href="http://www.gsu.edu/financialaid/zell_miller_scholarship.html">Zell Miller Scholarship</a> or explore the resources at <a target="_blank" href="https://secure.gacollege411.org/">GAcollege411</a>.
                         Georgia State University also offers scholarships to qualified students. For more information, please check out <a target="_blank" href="http://www.gsu.edu/scholarships/">our Scholarships website</a>.
                         </p>
                        
                        
                          <DIV id="resident_hope"  class="eee" style=" display:none;"> 
                            <LABEL> <a href="https://secure.gacollege411.org/" alt="GA Resident Only" title="GA Resident Only" target="_blank">HOPE/Zell Miller Scholarship</a>: </LABEL>
                                 <select class="slc"  name="scholarship" id="scholarship" onchange="toggle('hope');">
                                        <option value="0" selected>No</option>
                                        <option value="hope">HOPE Scholarship</option>
                                        <option value="zell">Zell Miller Scholarship</option>
                                  </select>
                                                
                                  <DIV id="hope"  class="eee" style="display:none;">   
                                      
                                      <br>                          
                                    
                                    <table>
                                      <tr>
                                         <td>
                                         <LABEL> Tuition: </LABEL>
                                              <div class="cost" id="hope_tuition" name="hope_tuition">$0.0</div> 
                                         
                                            </td> 
                                       </tr>
                                        
                                       
                                       <tr>
                                         <td>
                                       
                                               
                                              
                                               
                                                 <LABEL>&nbsp;</LABEL>
                                               <div class="cost" id="hope_fee" name="hope_fee">$0.0</div> 
                                         </td> 
                                       </tr>
                                       </table>
                                    <div> </div> 
                                  </DIV>             
                           </DIV>                          
                            <br/> 
                                        <LABEL>
                            Grant Estimate:
                            </LABEL>
                              <INPUT  type="text"  id="grant" name="grant"  size="10" maxlength="10" value="0" disabled style="outline:0; border:0; border-bottom:0;"/>
                              <a href='javascript: void(0)' onclick='loadboxy();'  id="grantlink"> <img src="http://www.gsu.edu/admissions/images/calculator.png" alt="Estimate Grant Amount"  title="Estimate Grant Amount "> Estimate  Grant Amount</a>
                              
                            <br /> <LABEL >Loan Amount: </LABEL>                         
                              <INPUT  type="text"  id="loan" name="loan"  size="10" maxlength="10" value="0"  onKeyUp="numer(this);" />  
                              <a  href="#" class="boxyinfo" id="loanAmount" title="Loan Amount"><img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a>
                              
                              
                            <br /> <LABEL >Scholarships Amount: </LABEL>
                              <INPUT  type="text"  id="scholarships" name="scholarships"  size="10" maxlength="10"   onKeyUp="numer(this);"  value="0"/ >
   
                                <br /> <LABEL >Veterans Benefit: </LABEL>
                              <INPUT  type="text"  id="veterans" name="veterans"  size="10" maxlength="10"   onKeyUp="numer(this);"  value="0"/ >
                                <a  href="#" class="boxyinfo" id="veterans_benefit" title="Veterans Benefit"><img src="http://webdb.gsu.edu/calculator/icon_info.gif" border="0"></a>
                              <br>
                          <LABEL> </LABEL>
                        <DIV class = notes>
                          
                          <h4> <i id="atotal">$0.0</i></h4> 
                             <!--- <INPUT class="inputSubmit" name="aid_submit" type="submit" value="Calculate" >     --->                      
                        </DIV>
          </FIELDSET>
         <DIV class = submit>
                          <table border="0" width="100%">
                            <tr> 
                              <td> <INPUT class = inputSubmit  name="ct_submit" type = submit value = "Calculate Total" ></td>
                              <td valing="top"> <DIV class = notes align="right">
                                                     <P class = last>&nbsp; </P>
                                                      <h2 style=" font-size:16px">TOTAL COST : <i id="total_cost">$0.0</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>   
                                                  </DIV>
                          </td>
                            </tr>
                          </table>
                           <!--<p>This calculator can help you get an idea of the costs associated with attending Georgia State.  
                           Figures generated are estimates only, and all rates and fees are subject to change without notice. </p>-->
                           <br><div width="100%" align="center"><h3><a target="_blank" href="http://www.gsu.edu/admissions/cost_calculator.html">View Disclaimer</a></h3></div><br>
                             </form>                       
             </DIV>       
<?php
}   
add_shortcode('cost-calculator','cal');
?>