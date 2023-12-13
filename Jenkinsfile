pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                // Les étapes à exécuter dans la première étape
                sh "rm -rf *"
                sh "git clone https://github.com/saidnouiri98/ci_cd_pipeline.git"
            }
        }

        stage('build and deploy') {
            steps {
                // Les étapes à exécuter dans la première étape
                sh "docker-compose down"
                sh "docker-compose up -d"
            }
        }
    }

}
