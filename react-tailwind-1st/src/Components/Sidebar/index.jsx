import { useState } from "react";
import { useLocation } from "react-router-dom";

const Sidebar = (props) => {
  const [sidebarOpen, setSidebarOpen] = useState(false);
  const pathname = useLocation().pathname;

  return (
    <>
      {/* mobile button */}
      <div
        onClick={() => setSidebarOpen(!sidebarOpen)}
        className="md:hidden w-full text-slate-400 bg-black bg-opacity-30"
      >
        <div className="flex items-center px-6 py-2">
          <div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className={`${!sidebarOpen ? "block" : "hidden"} h-5 w-5`}
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fillRule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clipRule="evenodd"
              />
            </svg>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className={`${sidebarOpen ? "block" : "hidden"} h-5 w-5`}
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fillRule="evenodd"
                d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                clipRule="evenodd"
              />
            </svg>
          </div>
          <div className="text-xl font-semibold px-2">{pathname}</div>
        </div>
      </div>
      {/* sidebar */}
      <div className={`${sidebarOpen ? "block" : "hidden"} md:flex`}>
        <div className="w-full md:w-[250px] bg-black bg-opacity-50 md:bg-opacity-30">
          <div className="px-8 md:px-4 py-8">{props.children}</div>
        </div>
      </div>
    </>
  );
};

export default Sidebar;
