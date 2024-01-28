<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Blogsite</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaqueries.css" />
  </head>
  <body>
  <nav id="desktop-nav">
      <div class="logo">Wheelsoon</div>
      <div>
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <!-- Update this line -->
          <li><a href="create.php" target="_blank">Create Blog</a></li>
        </ul>
      </div>
    </nav>
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/q.jpg" alt="Wilson profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Wilson</h1>
        <p class="section__text__p2">Frontend Developer eme</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/resume-example.pdf')"
          >
            Click me
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            onclick="location.href='https://linkedin.com/'"
          />
          <img
            src="./assets/github.png"
            alt="My Github profile"
            class="icon"
            onclick="location.href='https://github.com/'"
          />
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img
            src="assets\z.jpg"
            alt="Profile picture"
            class="about-pic"
          />
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img
                src="./assets/experience.png"
                alt="Experience icon"
                class="icon"
              />
              <h3>School</h3>
              <p>CPSU<br />San Carlos City Campus</p>
            </div>
            <div class="details-container">
              <img
                src="./assets/education.png"
                alt="Education icon"
                class="icon"
              />
              <h3>Education</h3>
              <p>Bachelor of Science in Information Technology<br />3rd Year College</p>
            </div>
          </div>
          <div class="text-container">
            <p>
            “I'm not a great programmer; I'm just a good programmer with great habits.”
― Kent Beck
            </p>
          </div>
        </div>
      </div>
      <img
        src="./assets/arrow.png"
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
      />
    </section>

    <section id="blog">
    <h1>Your new Blog</h1>
    <?php
    include 'db.php';

    $result = $conn->query("SELECT * FROM posts");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<div class='post-title'><strong>Title:</strong> <h2>" . htmlspecialchars($row['title']) . "</h2></div>";
        echo "<div class='post-author'><strong>Author:</strong> <h3>" . htmlspecialchars($row['author']) . "</h3></div>";
        echo "<div class='post-content'><strong>Content:</strong> <p>" . htmlspecialchars($row['content']) . "</p></div>";
        echo "<div class='post-actions'>";
        echo "<a href='edit.php?id=" . htmlspecialchars($row['id']) . "' target='_blank'>Edit</a> | ";
        echo "<a href='delete.php?id=" . htmlspecialchars($row['id']) . "' target='_blank'>Delete</a>";
        echo "</div>";
        echo "<hr>";
        echo "</div>";
    }

    echo "<a href='create.php' target='_blank'>Create New Post</a>";

    $conn->close();
    ?>
    
</section>

</section>

</section>

  </section>
    <script src="script.js"></script>
  </body>
</html>
