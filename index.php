<html>
    <head>
      <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
      <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
      <py-env>
        - numpy
        - matplotlib
      </py-env>
    </head>
  <body>
    <h1>Let's plot random numbers</h1>
    <div id="plot"></div>
    <py-script output="plot">
      import matplotlib.pyplot as plt
      import numpy as np
      
      x = np.random.randn(1000)
      y = np.random.randn(1000)
      
      fig, ax = plt.subplots()
      ax.scatter(x, y)
      fig
    </py-script>
  </body>
</html>