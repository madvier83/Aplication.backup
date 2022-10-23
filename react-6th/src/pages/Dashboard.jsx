import Navbar from "../components/Navbar";
import { Typography, Container } from "@mui/material";

export default function Dashboard() {
  return (
    <>
      <Navbar />
      <Container>
        <Typography variant="h2">Dashboard</Typography>
      </Container>
    </>
  );
}
