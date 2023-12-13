pipeline {
    agent any

    stages {
        stage('premiere etape') {
            steps {
                // Les étapes à exécuter dans la première étape
                sh "docker compose down"
                sh "docker compose up -d"
            }
        }
    }

    // You can add more stages or other configurations here

    // No need for the empty always block, you can remove it
    // always {
    
    // }
}
