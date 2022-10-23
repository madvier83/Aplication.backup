import express from "express";

const router = express.Router();

router.get("/", (req, res) => {
  res.send("GetAllUser");
});
router.get("/:id", (req, res) => {
  res.send("GetUserById");
});
router.patch("/:id", (req, res) => {
  res.send("UpdateUser");
});
router.delete("/:id", (req, res) => {
  res.send("DeleteUser");
});

export default router;
