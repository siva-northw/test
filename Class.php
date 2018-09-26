<!doctype html>  
<html lang="en">  
    <head>

    </head>
    <body>
        <h1>Hello World!</h1>
        <div id="future"></div>
        <form id="form" id="chat_form">
            <input id="chat_input" type="text">
            <input type="submit" value="Send">
        </form>
        
        <script>  
      
		
		var person = {
    firstName: "John",
    lastName : "Doe",
    id       : 5566,
      fullName() {
		a=2;
		console.log(a);
		console.log(this);
		//console.log(id + " " + this.lastName);
        //return this.firstName + " " + this.lastName;
    }
};
		person.fullName();
		
        </script>  
    </body>
</html>  