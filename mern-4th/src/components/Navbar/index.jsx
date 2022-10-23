import React, { useState } from "react";

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);
  return (
    <>
      <div className="bg-gradient-to-br from-slate-900 to-gray-800">
        <div className="flex flex-col md:flex-row">
          {/* Nav Title */}
          <div className="flex justify-between items-center border-b border-slate-500">
            <div>
              <h1 className="text-white text-2xl uppercase p-4">Navbar</h1>
            </div>
            <div>
              <button
                onClick={() => setIsOpen(!isOpen)}
                className="lg:hidden md:hidden p-4"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className={`${
                    isOpen ? "hidden" : "block"
                  } h-6 w-6 text-white`}
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  strokeWidth="2"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className={`${
                    !isOpen ? "hidden" : "block"
                  } h-6 w-6 text-white`}
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  strokeWidth="2"
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </button>
            </div>
          </div>
          {/* Nav Link */}
          <div
            className={`${
              isOpen ? "block" : "hidden"
            } md:flex md:flex-row flex-col justify-between w-full py-4`}
          >
            <div className="flex flex-col md:flex-row text-slate-300">
              <a href="#" className="block px-4 py-3 my-auto">
                Home
              </a>
              <a href="#" className="block px-4 py-3 my-auto">
                About
              </a>
              <a href="#" className="block px-4 py-3 my-auto">
                Contact
              </a>
            </div>
            <div className="flex flex-col md:flex-row text-slate-300">
              <a href="#" className="block px-4 py-3 my-auto">
                Login
              </a>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Navbar;
