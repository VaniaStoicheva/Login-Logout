
<html>
    <head>
        <meta charset="UTF-8" />
        <title>CV Generator</title>
    </head>
    <body>
        <script src="add_remove_buttons.js"></script>  
    <form method="post" action="CVResult.php">
            <fieldset>
                <legend>Personal information</legend>
                <input type="text" name="pr_info[First name]" placeholder="First name" autofocus="autofocus"/><br /> 
                <input type="text" name="pr_info[Last name]" placeholder="Last name" autofocus="autofocus"/><br />    
                <input type="text" name="pr_info[Email]" placeholder="Email" autofocus="autofocus"/><br />    
                <input type="text" name="pr_info[Phone number]" placeholder="Phone number" autofocus="autofocus"/><br />
                <label>Male:</label>
                <input type="radio" name="pr_info[Gemder]" value="male" autofocus="autofocus"/>    
                <label>Fmale:</label>
                <input type="radio" name="pr_info[Gender]" value="fmale" autofocus="autofocus"/><br />
                <label>Birth Date:dd/mm/yyyy</label><br />
                <input type="text" name="pr_info[Birth Date]" placeholder="dd/mm/yyyy" autofocus="autofocus"/><br />    
                <label>Nationaly</label><br />
                <select name="pr_info[nationaly]">
                    <option value="Bulgaria">Bulgaria</option> 
                    <option value="Italy">Italy</option> 
                    <option value="France">France</option> 
                    <option value="Greek">Greek</option> 
                </select>
            </fieldset>
            <fieldset>
                <legend>Last work position</legend>
                <label>Company name</label>
                <input type="text" name="last_work[Company]"/><br />
                <label>From:</label>
                <input type="date" name="last_work[From]"/><br />
                <label>To:</label>
                <input type="date" name="last_work[To]"/>
            </fieldset>
            <fieldset>
                <legend>Computer Scills</legend>
                <span>Programming languages</span><br />
                <input type="text" name="prog_lang[]" />
                
                <select name="prog_skills[]">
                    <option value="Beginer">Beginer</option>
                    <option value="Programmer">Programmer</option>
                    <option value="Ninja">Ninja</option>
                </select><br />
                <div id="prog_lang_box">
                    
                </div>
                <button type=button onclick="removeCopmLang()">Remove Languages</button>
                <button  type=button onclick="addCompLang()">Add Languages</button>
            </fieldset>
            <fieldset>
                <legend>Other Skills</legend>
                <label>Languages:</label><br />
                <input type="text" name="other_lang[]"/>
                <select name="lang_comp[]">
                    <option >-Comprehension-</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
                <select name="lang_reading[]">
                    <option >-Reading-</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
                <select name="lang_writing[]">
                    <option >Writing</option>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select><br />
                <div id="other_lang_box">
                    
                </div>
                <button type=button onclick="removeOtherLang()">Remove Languages</button>
                  <button type=button onclick="addOtherLang()">Add Languages</button><br />
                <label>Driver's License:</label>
                <label>B</label>
                <input type="checkbox" name='driver[]' value='B'/>
                 <label>A</label>
                <input type="checkbox" name='driver[]' value='A'/>
                 <label>C</label>
                <input type="checkbox" name='driver[]' value='C'/>
            </fieldset>
            <input type="submit" name='submit' value='Generate CV'/>
        </form>   
     
 </body>
   </html>

