import { useEffect, useState } from "react"
import { Link, useParams } from "react-router-dom";

export default function BlogDetail() {

    const [blog, setBlog] = useState({});
    const [loading, setLoading] = useState("true");

    const params = useParams();
    useEffect(function () {
        async function getBlog(){
            const request = await fetch(`https://api.spaceflightnewsapi.net/v3/blogs/${params.id}`).catch(()=>{setLoading("fail")});
            const response = await request.json();

            setBlog(response);
            setLoading("false");
            console.log(response);
        }
        getBlog();
    }, [params])
    return (
        <>
            {loading == "true" && (<p>Loading blog ...</p>)}
            {loading == "false" && (
                <>
                    <hr/>
                    <h1>{blog.title}</h1>
                    <img src={blog.imageUrl} alt={blog.newsSite} style={{height: 200}}/>
                    <p>{blog.summary}</p>
                    <br/>
                    <hr/>
                </>
            )}
            {loading == "fait" && (<p>Request data fail</p>)}
            
            <Link to="/blog">Back</Link>
        </>
    )
}