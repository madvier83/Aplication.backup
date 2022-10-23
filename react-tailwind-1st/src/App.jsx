import "./App.css";
import { Navbar } from "./Components";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import { Home, Flex, Grid } from "./Pages";

function App() {
  return (
    <>
      <Router>
        <Navbar />
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/flex" element={<Flex />} />
          <Route path="/grid" element={<Grid />} />
        </Routes>
      </Router>
    </>
  );
}

export default App;
