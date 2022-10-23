import { Link } from "react-router-dom";

function Navbar () {
    return (
        <>
            <nav>
                <Link to="/"> Home</Link> | 
                <Link to="/blog"> Blog</Link> | 
                <Link to="/todos"> Todos</Link>
            </nav>
        </>
    )
}

export default Navbar;