<?php

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace plog;

/**
 * Description of TeeLogger
 *
 * @author Alessio
 */
class TeeLogger implements Logger {

    use LoggerHelper;

    private $forwarded_a;
    private $forwarded_b;

    public function __construct(Logger $forwarded_a, Logger $forwarded_b) {
        $this->forwarded_a = $forwarded_a;
        $this->forwarded_b = $forwarded_b;
    }

    public function flush(): void {
        $this->forwarded_a->flush();
        $this->forwarded_b->flush();
    }

    public function log(int $level, string $message, array $info = []): void {
        $this->forwarded_a->log( $level, $message, $info );
        $this->forwarded_b->log( $level, $message, $info );
    }
}
