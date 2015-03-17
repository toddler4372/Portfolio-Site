// First we define the parent constructor
var Puppet = function(Name) {
  this.Name = Name;
};

// Add a couple of methods to Person.prototype
Puppet.prototype.walk = function(){
  console.log("I am walking!");
};

Person.prototype.sayHello = function(){
  console.log("Hello, I'm " + this.firstName);
};

// Define the Student constructor
function Student(firstName, subject) {
  // Call the parent constructor, making sure (using Function#call)
  // that "this" is set correctly during the call
  Person.call(this, firstName);

  // Initialize our Student-specific properties
  this.subject = subject;
};