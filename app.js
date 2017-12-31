var express = require("express"),
    app     = express();

app.set("view engine", "ejs");
app.use(express.static(__dirname + "/public"));

// Route for the main landing page
app.get("/", function(req, res){
    res.render("landing.ejs");
});


// Route for the about page
app.get("/about", function(req, res){
    res.render("about.ejs");
});

// Route for the about page
app.get("/temp", function(req, res){
    res.render("temporary.ejs");
});

// Route for the services page
app.get("/services", function(req, res){
    res.render("services.ejs");
});

app.get("/express-entry-programs", function(req, res){
    res.render("express_entry_programs.ejs");
});

app.get("/federal-skilled-worker-program", function(req, res){
    res.render("federal_skilled_worker_program.ejs");
});

app.get("/federal-skilled-trades-program", function(req, res){
    res.render("federal_skilled_trades_program.ejs");
});

app.get("/express-entry-canadian-experience-class", function(req, res){
    res.render("express_entry_canadian_experience_class.ejs");
});

app.get("/express-entry-PNP", function(req, res){
    res.render("express_entry_PNP.ejs");
});

app.listen('3000', process.env.IP, function(req, res){
    console.log("Server started...")
});