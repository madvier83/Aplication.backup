import { Link } from "react-router-dom";
import {
  AppBar,
  Toolbar,
  Typography,
  Menu,
  MenuItem,
  Button,
} from "@mui/material";

export default function Navbar() {
  return (
    <>
      <AppBar position="relative">
        <Toolbar sx={{ textDecoration: "none" }}>
          <Link to="/">Dashboard</Link>
          <Link to="/create">Create</Link>
        </Toolbar>
      </AppBar>
    </>
  );
}
