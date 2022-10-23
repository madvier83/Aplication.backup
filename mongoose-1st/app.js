const { urlencoded } = require("body-parser");
const express = require("express");
const expresLayout = require("express-ejs-layouts");

const app = express();
const port = 3000;

app.set("view engine", "ejs");
app.use(expresLayout);
app.use(express.static("public"));
app.use(urlencoded({ extended: true }));

app.get("/", (req, res) => {
  res.render("index", {
    title: "About",
    layout: "layout/index",
  });
});

app.listen(port, () => {
  console.log(`Contact app | Listening at http://localhost:${port}`);
});
