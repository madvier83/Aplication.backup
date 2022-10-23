import "./App.css";
import React, { useEffect, useState } from "react";
import axios from "axios";

function App() {
  const [hello, setHello] = useState("Hello World");
  const [movies, setMovies] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    async function getMovies() {
      const response = await axios.get(
        "https://imdb-api.com/en/API/Top250Movies/k_0wfiu702"
      );
      setMovies(response.data.items);
      setLoading(false);
    }
    getMovies();
  }, []);

  function changeHello() {
    setHello("Hello World !");
  }

  return (
    <>
      <div className="m-4">
        <button
          onClick={changeHello}
          className="btn btn-success btn-outline px-4 border-2 mb-4"
        >
          {hello}
        </button>
        {!loading ? (
          <div className="flex flex-wrap justify-between text-white">
            {movies?.map((movie) => {
              return (
                <div
                  key={movie.id}
                  className="bg-cyan-900 rounded-lg m-2 w-[28vw] md:w-[20vw] lg:w-[16vw] min-h-[240px] shadow-sm shadow-cyan-500"
                >
                  {/* <img src={movie.image} alt="" /> */}
                  {movie.fullTitle}
                </div>
              );
            })}
          </div>
        ) : (
          <h1 className="text-emerald-500 text-xl font-semibold">
            Loading data ...
          </h1>
        )}
      </div>
    </>
  );
}

export default App;
