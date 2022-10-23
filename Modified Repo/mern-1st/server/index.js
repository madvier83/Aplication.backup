import express from "express";
import cors from "cors";
import usersRoutes from "./routes/users.js";

const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// ENDPOINTS
app.use("/users", usersRoutes);
app.get("/", (req, res) => {
  res.json({
    message: "USER CRUDRL API",
  });
});

// SERVER
const PORT = 5000;
app.listen(PORT, () => console.log(`HTTP://localhost:${PORT}`));
