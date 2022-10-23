import "./App.css";
import { Navbar, NavbarAlter, ImageSlider } from "./components";
import { images } from "./SliderData";

function App() {
  return (
    <div>
      {/* <Navbar /> */}
      <NavbarAlter />
      {/* <h1 className="text-xl text-red-500">Main Content</h1> */}
      <ImageSlider images={images} />
    </div>
  );
}

export default App;
