 
 function validar(obj) {
   clase=obj.getAttribute("class");
   if (clase.indexOf("id")>0&&!(/^\D{2}\d{3}$/.test(obj.value))){
          return false;
    }
       
   if(clase.indexOf("letras")>0&&!(/^[a-zA-Z ]+$/.test(obj.value))){
      return false;
   }
       
   if(clase.indexOf("idp")>0&&!(/^\D{4}\d{3}$/.test(obj.value))){
       return false;
    }
  
   if (clase.indexOf("rfct")>0&&!(/^\D{4}\d{6}\D{3}$/.test(obj.value))){
      return false;
   }
   
   if(clase.indexOf("rfc")>0&&!(/^\D{3}\d{6}\D{3}$/.test(obj.value))){
      return false;
   }
        
    
 } 