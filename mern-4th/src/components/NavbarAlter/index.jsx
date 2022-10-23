import { useState } from "react";

const NavbarAlter = () => {
  const [isNavOpen, setIsNavOpen] = useState(false);
  return (
    <>
      <div className="bg-white md:flex md:flex-row relative z-50">
        <div className="flex justify-between items-center border-b p-4">
          <div>
            <h1 className="text-2xl bold">FL.</h1>
          </div>
          <div>
            <button
              onClick={() => setIsNavOpen(!isNavOpen)}
              className="md:hidden"
            >
              {/* default */}
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className={`${!isNavOpen ? "block" : "hidden"} h-6 w-6`}
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                strokeWidth={2}
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M4 6h16M4 12h16m-7 6h7"
                />
              </svg>
              {/* if nav open */}
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className={`${isNavOpen ? "block" : "hidden"} h-6 w-6`}
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                strokeWidth={2}
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
        {/* Links */}
        <div
          className={`${
            isNavOpen ? "absolute" : "hidden"
          } md:relative md:flex flex-col md:flex-row justify-between w-full py-4 pl-4 bg-white border-b`}
        >
          <div className="flex flex-col md:flex-row">
            <a href="" className="py-2 md:px-4">
              Home
            </a>
            <a href="" className="py-2 md:px-4">
              About
            </a>
            <a href="" className="py-2 md:px-4">
              Contact
            </a>
          </div>
          <div className="flex flex-col md:flex-row">
            <a href="" className="py-2 md:px-4">
              Sign In
            </a>
          </div>
        </div>
      </div>
    </>
  );
};

export default NavbarAlter;
