<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projects;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Projects::create([
            'title' => 'Damat Mobile App',
            'image' => 'damat.jpeg',
            'link' => 'https://damat.yopaaa.xyz',
            'github' => 'https://github.com/amiril07/damat-manajemen-keuangan.git',
            'description' => 'Damat (Dana Cermat) is a web-based personal financial recording application designed to help users track net balances, manage monthly budgets, and monitor daily cash flow through interactive graphic visualizations.',
            'technologies' => ['PHP', 'MySQL', "Chart.Js", "Groq"]
        ]);

        Projects::create([
            'title' => 'Monkey & Ape Image Classification',
            'image' => 'monkey.png',
            'link' => null,
            'github' => "https://github.com/amiril07/monyet-kera-classifier.git",
            'description' => 'Monkey and Ape Classifier is an automatic photo detection application to identify and differentiate primate species into Monkey or Ape categories instantly.',
            'technologies' => ['Pytorch', 'Flask', 'OpenCV', 'Grad-Cam']
        ]);

        Projects::create([
            'title' => 'Math Agent Intellect',
            'image' => 'math_agent.png',
            'link' => null,
            'github' => "https://github.com/amiril07/math-agent-intellect.git",
            'description' => 'Math Agent Intellect is an AI-powered assistant (AI Agent) specifically designed to solve complex mathematical problems from calculus, algebra, binary logic, to cost optimization complete with logical and interactive step-by-step explanations.',
            'technologies' => ['Pytorch', 'Flask', 'EasyOCR', 'Langgraph', "Langchain"]
        ]);

    }
}