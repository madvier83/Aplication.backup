import { Container, Typography, Button, ButtonGroup } from "@mui/material";
import Grid from "@mui/material/Grid";
import Paper from "@mui/material/Paper";
import SendIcon from "@mui/icons-material/Send";
// import { makeStyles } from "@mui/styles";

export default function Note() {
  return (
    <>
      <Container>
        <Grid container>
          <Grid item md={4}>
            <Paper elevation={1}>1</Paper>
          </Grid>
          <Grid item md={4}>
            <Paper elevation={1}>2</Paper>
          </Grid>
          <Grid item md={4}>
            <Paper elevation={1}>3</Paper>
          </Grid>
          <Grid item md={4}>
            <Paper elevation={1}>4</Paper>
          </Grid>
        </Grid>
        <hr />
        <ButtonGroup>
          <Button variant="contained" color="primary" endIcon={<SendIcon />}>
            Button1
          </Button>
          <Button variant="contained" color="secondary">
            Button2
          </Button>
          <Button variant="contained" color="success">
            Button3
          </Button>
          <Button variant="contained" color="error">
            Button3
          </Button>
        </ButtonGroup>
        <br />
        <Button variant="outlined" color="primary">
          Button1
        </Button>
        <Button variant="outlined" color="secondary" disableElevation>
          Button2
        </Button>
        <Button variant="outlined" color="success" disableElevation>
          Button3
        </Button>
        <Button variant="outlined" color="error" disableElevation>
          Button3
        </Button>
        <hr />
        <Typography variant="h1">h1. Heading</Typography>
        <Typography variant="h2">h2. Heading</Typography>
        <Typography variant="h3">h3. Heading</Typography>
        <Typography variant="h4">h4. Heading</Typography>
        <Typography variant="h5">h5. Heading</Typography>
        <Typography variant="h6" gutterBottom>
          h6. Heading
        </Typography>
        <Typography variant="subtitle1" color="textSecondary">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur
          dolor omnis nemo est placeat ratione quidem mollitia fugiat nulla illo
          maiores ipsam magni fuga doloremque, accusamus quasi cupiditate
          voluptate ab dicta ea maxime excepturi?
        </Typography>
        <Typography variant="body1" color="textSecondary">
          Quis similique dolores nam voluptas! Blanditiis ducimus, id sed
          voluptate tenetur optio est eveniet magnam mollitia exercitationem
          voluptas et officiis unde perferendis reiciendis quae animi, commodi
          fuga. Debitis, reprehenderit! Quisquam quasi facere sunt deserunt
          ratione id quibusdam. Quia explicabo ipsam, corporis sequi
          perspiciatis dicta inventore accusantium hic eaque ducimus cupiditate
          nesciunt quas, nobis deserunt dolor, assumenda iste repudiandae rem
          illo voluptatum placeat. Adipisci aperiam accusamus neque!
        </Typography>
        <Typography variant="button" gutterBottom>
          Button text
        </Typography>
      </Container>
    </>
  );
}
