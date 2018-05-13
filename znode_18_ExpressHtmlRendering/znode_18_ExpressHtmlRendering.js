var express = require("express");
var app = express();

//...use EJS to render HTML.
var ejs = require("ejs");

app.set("views", __dirname + "/views");
app.set("view engine", "ejs");
app.engine("html", ejs.renderFile);

app.use(express.static("public"));

var controller = require("./router/controller")(app);

var server = app.listen(2000, function(){
	console.log("서버가 가동되었습니다");
});
