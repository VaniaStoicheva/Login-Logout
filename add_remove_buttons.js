var nextId=0;
var langId=0;
function addCompLang(){
    nextId++;
    var addLang=document.createElement('div');
    addLang.setAttribute('id','prog_lang'+nextId);
    addLang.innerHTML='<input type="text" name="prog_lang[]"/>'
       +'<select name="prog_skills[]">'
       +'<option value="Beginer">Beginer</option>'
        +'<option value="Programmer">Programmer</option>'
         +'<option value="Ninja">Ninja</option>'
                +'</select><br />'; 
       
   var content= document.getElementById('prog_lang_box').appendChild(addLang);
}
function removeCopmLang(){
    
    var field=document.getElementById('prog_lang'+nextId);
    content=document.getElementById('prog_lang_box').removeChild(field);
   nextId--; 
}
function addOtherLang(){
  langId++;
  var addOther=document.createElement('div');
  addOther.setAttribute('id','other_lang'+langId);
  addOther.innerHTML='<input type="text" name="other_lang[]"/>'
          +'<select name="lang_comp[]">'
                    +'<option >-Comprehension-</option>'
                    +'<option value="Beginner">Beginner</option>'
                    +'<option value="Intermediate">Intermediate</option>'
                    +'<option value="Advanced">Advanced</option>'
                +'</select>'
                +'<select name="lang_reading[]">'
                    +'<option >-Reading-</option>'
                    +'<option value="Beginner">Beginner</option>'
                    +'<option value="Intermediate">Intermediate</option>'
                    +'<option value="Advanced">Advanced</option>'
                +'</select>'
                +'<select name="lang_writing[]">'
                    +'<option >Writing</option>'
                    +'<option value="Beginner">Beginner</option>'
                    +'<option value="Intermediate">Intermediate</option>'
                    +'<option value="Advanced">Advanced</option>'
                +'</select>'+'<br />';
        var content=document.getElementById('other_lang_box').appendChild(addOther);
}
function removeOtherLang(){
    var field=document.getElementById('other_lang'+langId);
    var content=document.getElementById('other_lang_box').removeChild(field);
    nextId--;
}