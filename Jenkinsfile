pipeline {
    agent any

    stages {

        stage('Build and Deploy') {
            steps {
                script {
                    // Build and run Docker Compose
                    sh 'docker-compose down'
                    sh 'docker-compose up -d'
                }
            }
        }
    }
}
