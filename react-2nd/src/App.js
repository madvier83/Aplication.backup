import React from 'react';
import './App.css';
import { Routes, Route, Link } from 'react-router-dom';
// import { act } from 'react-dom/test-utils';

import Navbar from './components/Navbar';
import DefaultComponent from './components/Default';
import ButtonKlik from './components/Button';

import Homepage from './pages/Home';
import Blog from './pages/Blog';
import Todos from './pages/Todos';

function App() {

  // let [navValue, updateNav] = React.useState("About Us");
  // const click = () => console.log('click');
  // const klik = () => {
  //   navValue == "About Us" ? updateNav("About Me") : updateNav("About Us")
  // }

  // [[[  FORM  ]]]
  // let [text, textUpdate] = React.useState("");
  // function submit (event) {
    //   event.preventDefault();
    //   console.log(text)
    // }

  return (
    <div className="App">
      <header className="App-header">
        <Navbar/>
        <Routes>
          <Route path="/" element={<Homepage/>}>Home</Route>
          <Route path="/blog" element={<Blog/>}>Blog</Route>
          <Route path="/todos" element={<Todos/>}>Todos</Route>
        </Routes>
      </header>
    </div>
  );
}

export default App;
