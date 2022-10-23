import { Sidebar } from "../../Components";
import { Link } from "react-router-dom";

const Flex = () => {
  return (
    <>
      {/* Wrapper */}
      <div className="flex flex-col md:flex-row w-full h-full min-h-screen bg-slate-900 text-slate-300">
        <Sidebar>
          <div className="flex flex-col text-slate-400 truncate">
            <h1 className="text-xl font-bold text-slate-200 mb-4">Grid</h1>
            <Link to="/grid">Grid wasd123</Link>
            <Link to="/grid">Grid wasd321</Link>
            <Link to="/grid">Grid qwer456</Link>
          </div>
          <div className="flex flex-col text-slate-400 truncate">
            <h1 className="text-xl font-bold text-slate-200 my-4">Grid</h1>
            <Link to="/grid">Grid wasd123</Link>
            <Link to="/grid">Grid wasd321</Link>
            <Link to="/grid">Grid qwer456</Link>
          </div>
        </Sidebar>

        <div className="mx-auto my-8">
          <h1 className="text-3xl">Grid</h1>
        </div>
      </div>
    </>
  );
};

export default Flex;
