<table class="list">
  <?php foreach($data['visitors'] as $l => $d){ ?>
    <tr>
      <td><?= $l ?>:</td>
      <td><?= $d ?></td>
    </tr>
  <?php } ?>
</table>

<table class="grid">
  <thead>
    <tr>
      <th>Content Type</th>
      <th>Visits</th>
      <th>Unique Visits</th>
      <th>Page Views</th>
      <th>Total Time On Content Type</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($data['content'] as $d){ ?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php } ?>

  </tbody>
</table>

<table class="grid">
  <thead>
    <tr>
      <th>Browser</th>
      <th>Unique Visits</th>
      <th>Percent of Total</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($data['technology'] as $d){ ?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php } ?>

  </tbody>
</table>