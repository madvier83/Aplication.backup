import React from "react";

function Blog () {
    // [[[[   BLOG   ]]]]
    let [blog, setBlog] = React.useState([]);
    let [loading, setLoading] = React.useState(true);

    React.useEffect(function () {
        // GET DATA FROM API
        async function getData() {
            const request = await fetch("https://api.spaceflightnewsapi.net/v3/blogs");
            const response = await request.json();
        
            // console.log(response);
            setBlog(response);
            setLoading(false);
        }
        getData();
        }, []

        // OR
        // const getData = 
        //   fetch("https://api.spaceflightnewsapi.net/v3/blogs")
        //   .then(
        //     function(response) {
        //       return response.json();
        //     }
        //   )
        //   .then(
        //     function(response) {
        //       console.log(response);
        //     }
        //   )
        //   console.log(getData)
    );

    return (
        <>
            <h1>Blog</h1>
            {loading && <i>Loading data . . .</i>}
            {!loading && (
            <ul>
                {blog.map(function (item) {
                // console.log(item.id);
                return <li key={item.id}>{item.title}</li>
                })}
            </ul>
            )}
        </>
    )
}

export default Blog;