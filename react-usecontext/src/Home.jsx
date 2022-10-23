import React, { useContext } from "react";
import { UserContext } from "./UserContext";

export default function Home() {
  const User = useContext(UserContext);
  return (
    <>
      <h1>Home</h1>
      <p>{User}</p>
    </>
  );
}
