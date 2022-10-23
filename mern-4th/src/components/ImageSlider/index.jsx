import React from "react";

const ImageSlider = (images) => {
  const image = images.images;
  return (
    <>
      <h1>Test</h1>
      {image.map((img) => {
        return <img src={img.url} alt="" />;
      })}
    </>
  );
};

export default ImageSlider;
