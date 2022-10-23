import { useState } from "react";
import { Link, useLocation } from "react-router-dom";

const Navbar = (props) => {
  const [navOpen, setNavOpen] = useState(false);
  const pathName = useLocation().pathname;
  return (
    <>
      <nav className="relative z-10 text-white bg-slate-800">
        {/* Background */}
        <div
          onClick={() => setNavOpen(!navOpen)}
          className={`${
            !navOpen ? "hidden" : "block"
          } md:hidden absolute -z-10 w-full h-screen top-0 bg-slate-900 opacity-50`}
        ></div>
        {/* Navigation */}
        <div className="flex flex-col md:flex-row">
          <div className="flex justify-between md:py-2 py-4 px-6 shadow">
            <div className="flex items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className="h-6 w-6 mt-1"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                strokeWidth={2}
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
                />
              </svg>
              <Link to="/">
                <h1 className="text-2xl flex pl-2">.Avr</h1>
              </Link>
            </div>
            <button onClick={() => setNavOpen(!navOpen)} className="md:hidden">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className={`${navOpen ? "hidden" : "block"} h-6 w-6`}
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                strokeWidth={2}
              >
                <path
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"
                />
              </svg>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                className={`${!navOpen ? "hidden" : "block"} h-6 w-6`}
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
          <div
            className={`${
              navOpen ? "block" : "hidden"
            } md:flex md:flex-row justify-between w-full md:py-2 py-4 px-4 text-slate-300`}
          >
            <div className="flex flex-col md:flex-row">
              <Link
                to="/"
                onClick={() => setNavOpen(!navOpen)}
                className={`${pathName == "/" && "nav-active"} py-2 px-4`}
              >
                Home
              </Link>
              <Link
                to="/flex"
                onClick={() => setNavOpen(!navOpen)}
                className={`${pathName == "/flex" && "nav-active"} py-2 px-4`}
              >
                Flex
              </Link>
              <Link
                to="/grid"
                onClick={() => setNavOpen(!navOpen)}
                className={`${pathName == "/grid" && "nav-active"} py-2 px-4`}
              >
                Grid
              </Link>
              <a
                href="https://github.com/madvier83/react-tailwind-1st"
                target="_blank"
                rel="noreferrer"
                onClick={() => setNavOpen(!navOpen)}
                className="py-2 px-4"
              >
                GitHub
              </a>
            </div>
            <div className="flex flex-col md:flex-row">
              <a
                href="https://wa.me/+6282376932445"
                target="_blank"
                onClick={() => setNavOpen(!navOpen)}
                className="py-2 px-4"
              >
                Contact
              </a>
            </div>
          </div>
        </div>
      </nav>
    </>
  );
};

export default Navbar;
