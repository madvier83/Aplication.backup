import { Route, Routes } from "react-router-dom";
import Create from "./pages/Create";
import Note from "./pages/Note";

function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<Note />} />
        <Route path="/create" element={<Create />} />
      </Routes>
    </>
  );
}

export default App;
