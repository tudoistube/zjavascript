var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var db = mongoose.connection;
var dbUrl = 'mongodb://dbuser0100:dbuser0100@ds163850.mlab.com:63850/humanresources';


var TeamSchema = new Schema({
  name: {
    type: String,
    required: true
  }
});
var Team = mongoose.model('Team', TeamSchema);

db.on('error', function () {
  console.log('there was an error communicating with the database');
});

mongoose.connect(dbUrl, function (err) {
  if (err) {
    return console.log('there was a problem connecting to the database!' + err);
  }
  console.log('connected!');

  var team = new Team({name: 'Product Development'});

  team.save(function(err, data){
    if(err){
      console.log('err in save : ${err}');
    }else{
      console.dir(data);
    }
    db.close();
    process.exit();

  })




});
