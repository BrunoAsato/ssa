﻿/*
 * Copyright © Aleksey Nemiro, 2015. All rights reserved.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
module SmallServerAdmin.Filters {

  /**
   * Numeric type.
   */
  export class Numeric implements Nemiro.IFilter {

    Name: string = 'Numeric';

    Filter: ng.IFilterService;

    constructor(filter: ng.IFilterService) {
      this.Filter = filter;
    }

    public Execution(value: any, args: any): any {
      return parseFloat(value);
    }

  }

}