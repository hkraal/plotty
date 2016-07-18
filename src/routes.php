<?php
// Routes
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    // disabled because logging every visit is silly - Nox
    //$this->logger->info("Slim-Skeleton '/' route");
    
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
