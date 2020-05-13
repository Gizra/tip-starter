<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{

  /**
   * Create an .env.local file for the MDR repo.
   *
   * @param string $backendUrl
   *   The backend URL.
   * @param string $accessToken
   *   The access token for the backend.
   * @param string $authorityUuid
   *   The Authority uuid (e.g. a Health-center UUID).
   * @param string|null $mdrRepoLocation
   *   Optional; The location of the MDR git repo. Defaults to
   */
  public function mdrCreateEnv(string $backendUrl, string $accessToken, string $authorityUuid, string $mdrRepoLocation = '~/mdr-symfony') {
    $fileName = '.env.local';

    $this->_exec("cp ./robo/template/.env.local $mdrRepoLocation");

    $this->taskReplaceInFile($mdrRepoLocation . '/' . $fileName)
      ->from([
        '{{backend-url}}',
        '{{access-token}}',
        '{{authority_uuid}}',
        ])
      ->to([
        $backendUrl,
        $accessToken,
        $authorityUuid,
      ])
      ->run();

    return 0;
  }
}