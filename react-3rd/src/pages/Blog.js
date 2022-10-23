import { useState, useEffect } from "react";
import { Link } from "react-router-dom";
export default function Blog() {
  const [blogs, setBlogs] = useState([]);
  const [loading, setLoading] = useState("true");
  
  useEffect(function () {
    async function getBlog() {

      const request = await fetch('https://api.spaceflightnewsapi.net/v3/blogs').catch(() => setLoading("fail"));
      const response = await request.json();

      setBlogs(response);
      setLoading("false");
      console.log(response);
    }
    getBlog();
  }, []);

  return (
    <>
      <hr/>
      <h1>Halaman Blog</h1>
      <hr/>
      {loading == "true" && (
        <p>Requesting data from API ...</p>
        )}
      {loading == "false" && blogs.map(function(blog) {
        return (
          <article key={blog.id}>
            <h3>{blog.title}</h3>
            <small>Published at : {new Date(blog.publishedAt).toLocaleDateString()}</small>
            <Link to={"/blog/" + blog.id}> Read More ...</Link>
          
          </article>
        )
      })}
      {loading == "fail" && (
        <>
          <p>Request data failed</p> 
          {/* <button onClick={getBlog()}>Refresh</button> */}
        </>
      )}
    </>
  );
}
