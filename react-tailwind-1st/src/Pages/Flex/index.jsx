import { Link, useLocation } from "react-router-dom";
import { Sidebar } from "../../Components";

const Flex = () => {
  return (
    <>
      {/* Wrapper */}
      <div className="flex flex-col md:flex-row w-full h-full min-h-screen bg-slate-900 text-slate-300">
        {/* sidebar */}
        <Sidebar>
          <div className="flex flex-col text-slate-400 truncate">
            <h2 className="text-xl font-bold text-slate-200 mb-4">
              Flex-direction
            </h2>
            <Link to="/flex">Flex-direction: row</Link>
            <Link to="/flex">Flex-direction: row-reverse</Link>
            <Link to="/flex">Flex-direction: column</Link>
            <Link to="/flex">Flex-direction: column-reverse</Link>
            <h2 className="text-xl font-bold text-slate-200 my-4">Flex-wrap</h2>
            <Link to="/flex">Flex-wrap: wrap</Link>
            <Link to="/flex">Flex-wrap: wrap-reverse</Link>
            <Link to="/flex">Flex-wrap: nowrap</Link>
            <h2 className="text-xl font-bold text-slate-200 my-4">Flex-grow</h2>
            <h2 className="text-xl font-bold text-slate-200 my-4">
              Flex-Shrink
            </h2>
            <h2 className="text-xl font-bold text-slate-200 my-4">
              Flex-basis
            </h2>
            <h2 className="text-xl font-bold text-slate-200 my-4">
              Justify-content
            </h2>
            <h2 className="text-xl font-bold text-slate-200 my-4">
              Align-items
            </h2>
            <h2 className="text-xl font-bold text-slate-200 my-4">
              Align-self
            </h2>
          </div>
        </Sidebar>
        {/* main content */}
        <div className="mx-auto my-8">
          <h1 className="text-3xl">Flex</h1>
        </div>
      </div>
    </>
  );
};

export default Flex;
