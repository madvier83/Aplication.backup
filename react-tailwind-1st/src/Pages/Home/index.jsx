const Home = () => {
  return (
    <>
      {/* Wrapper */}
      <div className="w-full h-full min-h-screen bg-slate-900 text-slate-300">
        <div className="flex flex-col items-center text-center pt-24 px-12 md:px-48 lg:px-64">
          <p className="text-4xl md:text-5xl font-bold">
            React + Tailwind Code Examples
          </p>
          <p className="mt-8 text-justify text-slate-400">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Dignissimos obcaecati quia libero inventore at provident modi itaque
            odio minima? Beatae temporibus sapiente optio totam omnis alias
            fugiat porro corporis voluptas, delectus ducimus asperiores facere
            unde? Assumenda, ipsa!
          </p>
          <p className="mt-8 text-slate-500">
            <b>&copy; Muhammad Advie Rifaldy</b>
          </p>
        </div>
      </div>
    </>
  );
};

export default Home;
