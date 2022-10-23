import { Routes, Route, Link } from "react-router-dom";
import "./App.css";
import Home from "./pages/Home";
import Blog from "./pages/Blog";
import BlogDetail from "./pages/BlogDetail";

function App() {
  return (
    <div className="App">
      <nav style={{ marginTop: 30, marginBottom: 20 }}>
        <Link to={"/"}>Home </Link> |<Link to={"/blog"}> Blog</Link>
      </nav>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="blog" element={<Blog />} />
        <Route path="blog/:id" element={<BlogDetail />} />
        <Route path="*" element={<></>} />
      </Routes>
    </div>
  );
}

export default App;
