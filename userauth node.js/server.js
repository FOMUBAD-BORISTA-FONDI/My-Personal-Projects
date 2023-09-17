if(process.env.NODE_ENV !== "production") {
    require("dotenv").config()
}


//Important Libraries which we installed using npm
const express = require("express")
const app = express()
const bcrypt = require("bcrypt")// IMporting bcrypt package
const passport = require("passport")
const initilizePassport = require("./passport-config")
const flash = require("express-flash")
const session = require("express-session")
const methodOverride = require("method-override")


initilizePassport(
    passport,
    email => users.find(user => user.email === email),
    id => users.find(user => user.id === id)
)



const users = []

app.use(express.urlencoded({extended: false}))
app.use(flash())
app.use(session({
    secret: process.env.SESSION_SECRET,
    resave: false, // It wont save the session variable if nothing is change
    saveUninitialized: false
}))
app.use(passport.initialize())
app.use(passport.session())
app.use(methodOverride("_method"))

//configuring the login post functionality
app.post("/login", checkNotAuthenticated, passport.authenticate("local", {
    successRedirect: "/home",
    failureRedirect: "/login",
    failureFlash: true
}))

//COnfiguring the register post functionality
app.post("/register", checkNotAuthenticated, async (req, res) => {
    try{
        const hashedPassword = await bcrypt.hash(req.body.password, 10)
        users.push({
            id:Date.now().toString(), //Changing id to random number
            name: req.body.name,
            email: req.body.email,
            password: hashedPassword,
        })
        console.log(users);//Display newly registered users in the console
        res.redirect("/login")
    }catch (e) {
        console.log(e);
        res.redirect("/register")
    }
})

//Routes
app.get('/home', checkAuthenticated, (req, res) => {
    res.render("index.ejs", {name: req.user.name})
})
// , {name: req.user.name}

app.get('/login', checkNotAuthenticated, (req, res)=>{
    res.render("login.ejs")
})

app.get('/register', checkNotAuthenticated, (req, res)=>{
    res.render("register.ejs")
})

app.delete("/logout", (req, res) => {
    req.logOut(req.user, err => {
        if(err)return next(err)
        res.redirect("/home")
    })
})

//End routes


function checkAuthenticated(req, res, next){
    if(req.isAuthenticated()){
        return next()
    }
    res.redirect("/login")
}

function checkNotAuthenticated(req, res, next){
    if(req.isAuthenticated()){
       return res.redirect("/home")
    }
    next()
}

app.listen(3000)