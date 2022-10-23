import "./App.css";
import React, { useContext } from "react";
import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom";
import Home from "./Home";
import About from "./About";
import { UserContext } from "./UserContext";

function App() {
  return (
    <Router>
      <UserContext.Provider value="test context">
        <nav>
          <Link to="/">Home-</Link>
          <Link to="/about">About</Link>
        </nav>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
        </Routes>
      </UserContext.Provider>
    </Router>
  );
}

export default App;
