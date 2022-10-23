const { MongoClient } = require("mongodb");

const uri = "mongodb://127.0.0.1:27017";
const dbName = "test-me";

const client = new MongoClient(uri, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

client.connect((error, client) => {
  if (error) {
    return console.log("connection failed");
  }
  //   console.log("connected!");
  const db = client.db(dbName);

  db.collection("mahasiswa")
    .find()
    .toArray((error, result) => {
      console.log(result);
    });
  //   db.collection("mahasiswa").insertOne(
  //     {
  //       nama: "Ihsan",
  //       email: "ihsan@gmail.com",
  //     },
  //     (error, result) => {
  //       if (error) {
  //         return console.log(error);
  //       }
  //       console.log(result);
  //     }
  //   );

  //   db.collection("mahasiswa").insertMany(
  //     [
  //       {
  //         nama: "Faisal",
  //         email: "faisal@gmail.com",
  //       },
  //       {
  //         nama: "rifal",
  //         email: "rifal@gmail.com",
  //       },
  //     ],
  //     (error, result) => {
  //       if (error) {
  //         console.log(error);
  //       }
  //       console.log(result);
  //     }
  //   );
});
